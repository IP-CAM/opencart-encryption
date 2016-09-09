<?php

namespace OpenCart\Encryption;

use Defuse\Crypto\Crypto;

class Encryption {
	/**
	 * @var string
	 */
	private $key;

	/**
	 * @param string $key
	 */
	public function __construct($key) {
		$this->key = hash('sha256', $key, true);
	}

	/**
	 * @param string $value
	 * @return string
	 */
	public function encrypt($value) {
		return Crypto::encrypt($value, $this->key);
	}

	/**
	 * @param string $value
	 * @return string
	 */
	public function decrypt($value) {
		return Crypto::decrypt($value, $this->key);
	}
}
