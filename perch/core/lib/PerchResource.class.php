<?php

class PerchResource extends PerchBase
{
	protected $table  = 'resources';
    protected $pk     = 'resourceID';

    private $clean_resources = true;

    function __construct($details) 
    {        
        if (defined('PERCH_CLEAN_RESOURCES')) $this->clean_resources = PERCH_CLEAN_RESOURCES;
        return parent::__construct($details);
    }

    public function delete()
    {
    	if ($this->clean_resources && !$this->resourceInLibrary()) {
	    	$Perch 	= Perch::fetch();
	        $bucket = $Perch->get_resource_bucket($this->resourceBucket());

	        $file_path = PerchUtil::file_path($bucket['file_path'].'/'.$this->resourceFile());

	        if (file_exists($file_path) && !is_dir($file_path)) {
	        	unlink($file_path);
	        	PerchUtil::debug('Deleting resource: '.$file_path);
	        }
	    }

    	return parent::delete();
    }
}
