<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ImageUploaded;
use Image;
use File;
use Carbon\Carbon;
use PHPUnit\Framework\Constraint\Constraint;

class ProductController extends Controller
{
    public $path;
    public $fullPath;
    public $dimensions;

    public function __construct(Product $product, ImageUploaded $imageUploaded)
    {
        $this->product          = $product;
        $this->imageUploaded    = $imageUploaded;

        $this->path             = 'assets/images/gallery';
        $this->fullPath         = storage_path('app/public/'.$this->path);
        $this->dimensions       = ['200x200', '600x600', '1080x1440'];
    }

    public function store(Request $request)
    {
        $data = request()->all();

        $validators = Validator::make($data, [
            'title'         => 'required',
            'description'   => 'required|min:5',
            'price'         => 'required',
            'rating'        => 'required',
            'image.*'       => 'required|image|mimes:jpg,png,jpeg'
        ]);

        if($validators->fails()) {
            return response()->json([
                'success'   => false,
                'data'      => [],
                'massage'   => $validators->errors()->all()
            ], 400);
        }

        if(count($data['image']) > 4) {
            return response()->json([
                'success'   => false,
                'data'      => [],
                'massage'   => 'Uploaded images must not be more than 4'
            ], 400);
        }

        $data['slug'] = Str::slug($data['title'], '-');
        $store = $this->product->create($data);

        if($store) {
            // Jika folder belum ada
            if(!File::isDirectory($this->fullPath)) {
                // Perintah untuk membuat folder
                File::makeDirectory($this->fullPath, 0777, true);
            }

            $files = $request->file('image');

            foreach($files as $file) {

                $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

                Image::make($file)->save($this->fullPath . '/' . $fileName);

                foreach($this->dimensions as $dimension) {
                    $separateDimension = explode('x', $dimension);

                    $canvas = Image::canvas($separateDimension[0], $separateDimension[1]);

                    $resizeImage = Image::make($file)->resize($separateDimension[0], $separateDimension[1], function($constraint) {
                        $constraint->aspectRatio();
                    });

                    if(!File::isDirectory($this->fullPath . '/' . $dimension)) {
                        File::makeDirectory($this->fullPath . '/' . $dimension, 0777, true);
                    }

                    $canvas->insert($resizeImage, 'center');
                    $canvas->save($this->fullPath . '/' . $dimension . '/' . $fileName);
                }

                $this->imageUploaded->create([
                    'product_id'    => $store->id,
                    'name'          => $fileName,
                    'dimensions'    => implode('|', $this->dimensions),
                    'path'          => 'storage/'.$this->path,
                    'extension'     => $file->getClientOriginalExtension()
                ]);

            }

            return response()->json([
                'success'   => true,
                'data'      => $store->with('imageUploaded')->orderBy('id', 'DESC')->first(),
                'message'   => 'Data product successfully stored'
            ], 200);

        }

        return response()->json([
            'success'   => false,
            'data'      => [],
            'message'   => 'Something went wrong'
        ], 400);

    }
}
