<?php

namespace App\Controller\Admin;

use App\Entity\Cards;
use App\Controller\Admin\CardsCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CardsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cards::class;
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            TextEditorField::new('text'),
            ImageField::new('picture') // Utilise ImageField pour uploader une image
                ->setBasePath('assets/images') // Chemin vers le dossier d'upload
                ->setUploadDir('public/assets/images') // Dossier de destination
                ->setRequired(false), // Si le téléchargement est facultatif
        ];
    }

}
