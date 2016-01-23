<?php
/**
 * Author: Vehsamrak
 * Date Created: 19.01.16 22:14
 */

namespace Controller;

use Entity\EntryRepository;
use Framework\AbstractController;
use Framework\Database;

class IndexController extends AbstractController
{

    public function indexAction()
    {
        $connection = (new Database())->getConnection();
        $entryRepository = new EntryRepository($connection);

        $this->render(['entries' => $entryRepository->findAll()]);
    }
}
