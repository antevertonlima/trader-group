<?php

namespace App\Http\Forms;

use Kris\LaravelFormBuilder\Form;

class TraderCategory extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text')
            ->add('submit', 'submit', [
                'attr' => ['class' => 'btn btn-primary'],
                'label' => 'Salvar',
            ]);
    }
}
