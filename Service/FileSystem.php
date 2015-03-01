<?php

namespace FCCC\Importer\Service;

use Symfony\Component\Filesystem\Filesystem as SymfonyFileSystem;

class FileSystem extends SymfonyFileSystem
{
	public function directoryExists($directory)
	{
		return is_dir($directory);
	}
}