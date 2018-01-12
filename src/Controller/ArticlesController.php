<?php
namespace App\Controller;

class ArticlesController extends AppController
{
    public function index()
    {
        $this->request->getSession()->write('key', 'value');
        $this->request->getSession()->read('key');

        $this->set('articles', $this->Articles->find());
    }
}
