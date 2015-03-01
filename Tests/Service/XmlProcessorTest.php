<?php

namespace FCCC\Importer\Tests\Service;

use FCCC\Importer\Service\XmlProcessor;
use PHPUnit_Framework_TestCase as TestCase;

class XmlProcessorTest extends TestCase
{
	public function testCheckFilePath()
	{
		$fileSystemMock = $this->getMockedFileSystem(['directoryExists']);
		$fileSystemMock->expects($this->once())->method('directoryExists')->willReturn(false);
		
		$this->setExpectedException('\RuntimeException');
		
		$xmlProcessor = $this->getXmlProcessor($fileSystemMock);
		$xmlProcessor->throwIfFilePathDoesNotExist('whatever');
	}
	
	public function testGetAvailableFiles()
	{
		
	}

	private function getMockedFileSystem(array $methods = [])
	{
		$fileSystemMock = $this->getMockBuilder('\FCCC\Importer\Service\FileSystem')
			->setMethods($methods)
			->getMock();

		return $fileSystemMock;
	}
	
	private function getXmlProcessor($fileSystem, array $methods = [])
	{
		$xmlProcessor = $this->getMockBuilder('\FCCC\Importer\Service\XmlProcessor')
			->setConstructorArgs(['whatever'])
			->setMethods($methods + ['getFileSystem'])
			->getMock();

		$xmlProcessor->expects($this->any())->method('getFileSystem')->willReturn($fileSystem);

		return $xmlProcessor;
	}
}
