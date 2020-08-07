<?php

namespace MyProject\Models\Articles;

class Article
{
private $title;
private $text;

  public function __construct(string $title, string $text)
  {
  $this->title = $title;
  $this->text = $text;
  $this->author = $author;
  }
  
  public function getTitle(): string
  {
  return $this->title;
  }

  public function getText(): string
  {
  return $this->text;
  }
}