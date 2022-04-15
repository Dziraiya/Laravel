<?php declare(strict_types=1);

namespace App\Services;

use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;
use Storage;
use Str;

class ParserService
{
    protected string $url;

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function parsing()
    {
        $xml = XmlParser::load($this->url);

        $data = $xml->parse([
            'title' => [
                'uses' => 'channel.title'
            ],
            'link' => [
                'uses' => 'channel.link'
            ],
            'description' => [
                'uses' => 'channel.description'
            ],
            'image' => [
                'user' => 'channel.image.url'
            ],
            'news' => [
                'uses' => 'channel.item[title,link,guid,description,PubDate]'
            ]
        ]);

        $e = explode('/', $this->url);
        $fileName = end($e);
        Storage::append('parsing/' . $fileName . '.txt', json_encode($data));

        return $data;
    }
}
