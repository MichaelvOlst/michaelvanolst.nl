<?php namespace vanolst\Images;

use Intervention\Image\ImageManagerStatic as Image;
use Projects;
use File;
use Images as Img;
use vanolst\Exceptions\ImagesNotArrayException;



class Images {

	protected $images;
	protected $path;
	protected $thumbnail;
	protected $pathThumb;
	protected $allNames = [];
	protected $store = [];
	
	public function saveImages($images, $path)
	{
		$this->path = $path;
		$this->pathThumb = $path . '/thumb/';

		//check if images is an array else throw an exception
		if (is_array($images)) {
			foreach($images as $image){
				$this->imageName = $image->getClientOriginalName();
				$this->saveSlideshow(Image::make($image)->resize(600, null, function ($constraint) {
					$constraint->aspectRatio();
				}));
				$this->allNames[] = $image->getClientOriginalName();
				$this->store[] = new Img(['image' => $this->imageName]);
			} // end foreach
		} else {
			throw new ImagesNotArrayException('there is no array of images');
		}

		$this->images = new \Illuminate\Support\Collection($images);

		$this->thumbnail($this->images->first());
	}

	private function thumbnail($image)
	{
		$this->saveThumbnail(Image::make($image)->resize(300, null, function($constraint){
				$constraint->aspectRatio();
		}), $image->getClientOriginalName() );
	}
	
	private function saveSlideshow($image)
	{
		File::exists($this->path) or File::makeDirectory($this->path);
		$image->save($this->path. '/' .$this->imageName);
	}

	private function saveThumbnail($image, $name)
	{
		File::exists($this->pathThumb) or File::makeDirectory($this->pathThumb);
		$image->save($this->pathThumb . $name);
	}

	public function store()
	{
		
		return $this->store;	
	}

	public function update()
	{
		
		return $this->allNames;
		
	}
}