<?php

// here we make our Kirby users children of the authors page
class AuthorsPage extends Page
{

    public function children()
    {
        $users = kirby()->users();
        $pages   = [];

        foreach ($users as $user) {
            $pages[] = [
                'slug'     => Str::slug($user->name()->value()),
                'num'      => 0,
                'template' => 'author',
                'model'    => 'author',
                'content'  => [
                    'title'    => $user->name()->value(),
                    'email'    => $user->email(),
                    'bio'    => $user->bio(),
                ]
            ];
        }

        return Pages::factory($pages, $this);
    }
}
