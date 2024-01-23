<?php

namespace App\Jobs;


use Spatie\Image\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    private $h;
    private $w;
    private $path;
    private $filename; 
    
    /**
     * Create a new job instance.
     */
    public function __construct($filePath, $w, $h, )
    {
        $this->path=dirname($filePath);
        $this->filename=basename($filePath);
        $this->w=$w;
        $this->h=$h; 
       
    }



    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // $image->width(int $w);
        // $image->height(int $h);
        
        $w= $this->w;
        $h= $this->h;
        $srcPath= storage_path() . "/app/public/" . $this->path . "/" . $this->filename;
        
        $destPath= storage_path() . "/app/public/" . $this->path . "/crop_{$w}x{$h}_" . $this->filename;
        
        $croppedImage=Image::load($srcPath)
                      ->crop(Manipulations::CROP_CENTER, $w, $h) 
                      ->watermark(base_path('resources/image/E-presto.png'))
                      ->watermarkOpacity(50) 
                      ->watermarkPosition(Manipulations::POSITION_BOTTOM_RIGHT)      
                      ->watermarkHeight(30, Manipulations::UNIT_PERCENT)    
                      ->watermarkWidth(30, Manipulations::UNIT_PERCENT) 
                      ->save($destPath);

        // $croppedImage=$image->fit(Fit::crop(), int $w, int $h)->save($destPath);
    }
}