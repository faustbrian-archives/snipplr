<?php

/*
 * This file is part of Snipplr PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Snipplr\Api;

use BrianFaust\Snipplr\AbstractApi;

class Snippet extends AbstractApi
{
    public function listing($tags, $sort = 'title', $limit = null)
    {
        return $this->post('snippet.list', compact('tags', 'sort', 'limit'));
    }

    public function details($snippet_id)
    {
        return $this->post('snippet.get', compact('snippet_id'));
    }

    public function create($title, $code, $tags = null, $language = null)
    {
        return $this->post('snippet.post', compact('title', 'code', 'tags', 'language'));
    }

    public function delete($snippet_id)
    {
        return $this->post('snippet.delete', compact('snippet_id'));
    }

    public function validateKey()
    {
        return $this->post('user.checkkey');
    }

    public function languages()
    {
        return $this->post('languages.list');
    }
}
