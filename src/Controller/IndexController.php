<?php
/**
 * Author: Vehsamrak
 * Date Created: 19.01.16 22:14
 */

namespace Controller;

use Entity\Entry;
use Entity\EntryRepository;
use Framework\AbstractController;
use Framework\Database;

class IndexController extends AbstractController
{

    public function indexAction()
    {
        $connection = (new Database())->getConnection();
        $entryRepository = new EntryRepository($connection);

        $form = $this->getPost();

        if ($form && isset($form['entry_author']) && isset($form['entry_text'])) {
            $entry = new Entry($form['entry_author'], $form['entry_text']);
            $entryRepository->save($entry);
        }

        $this->render(['entries' => $entryRepository->findAllSortedByDate()]);
    }
}
