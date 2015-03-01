<?php

namespace FCCC\Importer\Service;

use RuntimeException;
use FCCC\Importer\Service\FileSystem;

class XmlProcessor
{
	private $_fileSystem;

	public function __construct()
	{
		$this->_fileSystem = new FileSystem();
	}

	public function throwIfFilePathDoesNotExist($filePath)
	{
		if (!$this->getFileSystem()->directoryExists($filePath)) {
			throw new RuntimeException(sprintf('Directory does not exist: %s', $filePath));
		}
	}

	public function getFilePath()
	{
		return $this->_filePath;
	}

	public function getFileSystem()
	{
		return $this->_fileSystem;
	}

	public function getAvailableFiles($filePath)
	{
		$this->throwIfFilePathDoesNotExist($filePath);		
	}

	public function getObjectFromFile($file)
	{
		
	}

	public function getFileContent($filename)
	{
		
	}
}
