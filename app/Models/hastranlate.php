<?php


use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class NewsItem extends Model
{
    
    use HasTranslations;

    public $translatable = ['en', 'fr', 'nl'];
        

    
}
$newsItem = new NewsItem(); // This is an Eloquent model
$newsItem
   ->setTranslation('name', 'en', 'Name in English')
   ->setTranslation('name', 'nl', 'Naam in het Nederlands')
   ->setTranslation('name', 'fr', 'Naam in het français')
   ->save();

$newsItem->name; // Returns 'Name in English' given that the current app locale is 'en'
$newsItem->getTranslation('name', 'nl'); // returns 'Naam in het Nederlands'

app()->setLocale('nl');

$newsItem->name; // Returns 'Naam in het Nederlands'
