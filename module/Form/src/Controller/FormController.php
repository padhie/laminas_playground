<?php

declare(strict_types=1);

namespace Form\Controller;

use Form\Form\DummyForm;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class FormController extends AbstractActionController
{
    public function getAction(): ViewModel
    {
        return new ViewModel(
            [
                'form' => new DummyForm(),
            ]
        );
    }

    public function postAction(): ViewModel
    {
        $form = new DummyForm();
        $request = $this->getRequest();

        $form->setData($request->getPost());

        if ($form->isValid()) {
            var_dump('VALID');
        }

        return new ViewModel(
            [
                'form' => new DummyForm(),
            ]
        );
    }
}
