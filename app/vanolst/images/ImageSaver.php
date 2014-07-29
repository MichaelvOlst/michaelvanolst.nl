<?php namespace vanolst\Images;

use Intervention\Image\ImageManagerStatic as Image;
use Projects;
use File;
use Images as Img;
use Vanolst\Exceptions\ImagesNotArrayException;



class ImageSaver {

	protected $images;
	protected $path;
	protected $thumbnail;
	protected $allNames = [];
	protected $store = [];
	
	public function saveImages($images, $path)
	{
		$this->path = $path;
	
		foreach($images as $image){
			$this->imageName = $image->getClientOriginalName();
			$this->save(Image::make($image));
			$this->allNames[] = $image->getClientOriginalName();
			$this->store[] = new Img(['image' => $this->imageName]);
		} // end foreach
	}
	
	private function save($image)
	{
		File::exists($this->path) or File::makeDirectory($this->path);
		$image->save($this->path . '/' . $this->imageName);
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