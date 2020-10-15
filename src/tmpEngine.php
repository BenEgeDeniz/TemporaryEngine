<?php

/**
 * TemporaryEngine Class
 * Develeoper: TimberLock
 * Developer Website: benegedeniz.com
 */
class tmpEngine
{
	private $tmpDirectory;

	public function setTmpDir($tmpDir)
	{
		$this->tmpDirectory = $tmpDir;
	}

	public function createTmp($tmpName, $tmpData)
	{
		try
		{
			if (empty($this->tmpDirectory))
				throw new Exception("Temporary directory must be set.");

			if (file_exists($this->tmpDirectory . "/" . $tmpName . ".tmp"))
				throw new Exception("Temporary file \"" . $tmpName . "\" already exists.");

			file_put_contents($this->tmpDirectory . "/" . $tmpName . ".tmp", $tmpData);
		}
		catch (Exception $e)
		{
			echo "Caught exception: " . $e->getMessage();
		}
	}

	public function readTmp($tmpName)
	{
		try
		{
			if (empty($this->tmpDirectory))
				throw new Exception("Temporary directory must be set.");

			if (!file_exists($this->tmpDirectory . "/" . $tmpName . ".tmp"))
				throw new Exception("Temporary file \"" . $tmpName . "\" not found.");

			return file_get_contents($this->tmpDirectory . "/" . $tmpName . ".tmp");
		}
		catch (Exception $e)
		{
			echo "Caught exception: " . $e->getMessage();
		}
	}

	public function updateTmp($tmpName, $tmpData)
	{
		try
		{
			if (empty($this->tmpDirectory))
				throw new Exception("Temporary directory must be set.");

			if (!file_exists($this->tmpDirectory . "/" . $tmpName . ".tmp"))
				throw new Exception("Temporary file \"" . $tmpName . "\" not found.");

			file_put_contents($this->tmpDirectory . "/" . $tmpName . ".tmp", $tmpData);
		}
		catch (Exception $e)
		{
			echo "Caught exception: " . $e->getMessage();
		}
	}

	public function removeTmp($tmpName)
	{
		try
		{
			if (empty($this->tmpDirectory))
				throw new Exception("Temporary directory must be set.");

			if (!file_exists($this->tmpDirectory . "/" . $tmpName . ".tmp"))
				throw new Exception("Temporary file \"" . $tmpName . "\" not found.");

			unlink($this->tmpDirectory . "/" . $tmpName . ".tmp");
		}
		catch (Exception $e)
		{
			echo "Caught exception: " . $e->getMessage();
		}
	}
}

?>