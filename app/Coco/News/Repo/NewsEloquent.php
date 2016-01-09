<?php
namespace App\Coco\News\Repo;

use App\Coco\News\Repo\NewsInterface;
use App\Coco\News\Entities\News as M;

class NewsEloquent implements NewsInterface
{
    protected $news;

    public function __construct(M $news)
    {
        $this->news = $news;
    }

    public function getAll(){

        return $this->news->orderBy('date','DESC')->get();
    }

    public function find($id){

        return $this->news->findOrFail($id);
    }

    public function create(array $data){

        $news = $this->news->create(array(
            'titre' => $data['titre'],
            'texte' => $data['texte'],
            'date'  => $data['date']
        ));

        if( ! $news )
        {
            return false;
        }

        return $news;

    }

    public function update(array $data){

        $news = $this->news->findOrFail($data['id']);

        if( ! $news )
        {
            return false;
        }

        $news->fill($data);
        $news->save();

        return $news;
    }

    public function delete($id){

        $news = $this->news->find($id);

        return $news->delete($id);
    }

}
