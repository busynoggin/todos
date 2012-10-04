<?php
namespace BusyNoggin\Todos\Controller;

/**
 * Todo controller for the todos extension
 */
class TodoController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * todoRepository
	 *
	 * @var \BusyNoggin\Todos\Domain\Repository\TodoRepository
	 * @inject
	 */
	protected $todoRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function indexAction() {
		$todos = $this->todoRepository->findAll();
		$this->view->assign('todos', $todos);
	}

	/**
	 * action new
	 *
	 * @param \BusyNoggin\Todos\Domain\Model\Todo $newTodo
	 * @dontvalidate $newTodo
	 * @return void
	 */
	public function newAction(\BusyNoggin\Todos\Domain\Model\Todo $newTodo = NULL) {
		if ($newTodo == NULL) {
			$newTodo = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('BusyNoggin\Todos\Domain\Model\Todo');
		}
		$this->view->assign('newTodo', $newTodo);
	}

	/**
	 * action create
	 *
	 * @param \BusyNoggin\Todos\Domain\Model\Todo $newTodo
	 * @return void
	 */
	public function createAction(\BusyNoggin\Todos\Domain\Model\Todo $newTodo) {
		$this->todoRepository->add($newTodo);
		$this->flashMessageContainer->add('Your new Todo was created.');
		$this->redirect('index');
	}

	/**
	 * action edit
	 *
	 * @param \BusyNoggin\Todos\Domain\Model\Todo $todo
	 * @return void
	 */
	public function editAction(\BusyNoggin\Todos\Domain\Model\Todo $todo) {
		$this->view->assign('todo', $todo);
	}

	/**
	 * action update
	 *
	 * @param \BusyNoggin\Todos\Domain\Model\Todo $todo
	 * @return void
	 */
	public function updateAction(\BusyNoggin\Todos\Domain\Model\Todo $todo) {
		$this->todoRepository->update($todo);
		$this->flashMessageContainer->add('Your Todo was updated.');
		$this->redirect('index');
	}

	/**
	 * action delete
	 *
	 * @param \BusyNoggin\Todos\Domain\Model\Todo $todo
	 * @return void
	 */
	public function deleteAction(\BusyNoggin\Todos\Domain\Model\Todo $todo) {
		$this->todoRepository->remove($todo);
		$this->flashMessageContainer->add('Your Todo was removed.');
		$this->redirect('index');
	}

}
?>