<?php

namespace BusyNoggin\Todos\Domain\Model;


/**
 * A Todo
 *
 */
class Todo extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Item description
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $description;

	/**
	 * Item is done
	 *
	 * @var boolean
	 */
	protected $done = FALSE;

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the done
	 *
	 * @return boolean $done
	 */
	public function getDone() {
		return $this->done;
	}

	/**
	 * Sets the done
	 *
	 * @param boolean $done
	 * @return void
	 */
	public function setDone($done) {
		$this->done = $done;
	}

	/**
	 * Returns the boolean state of done
	 *
	 * @return boolean
	 */
	public function isDone() {
		return $this->getDone();
	}
}
?>