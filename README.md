Doctrine columns
================

Why?
---

Because stop copy-paste code. Reuse it!

How!?
-----

Just use column-trait, that you need.

```php
use Nkt\Column;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="books")
 */
class Book
{
    use Column\Id;
    use Column\Name;
    use Column\Description;
    use Column\Price;

    public function __construct($name, $description)
    {
        $this->setName($name);
        $this->setDescription($description);
    }
}
```

How I can help?
---------------

Add your popular column and get rid of copy-paste!

License
-------
[MIT](LICENSE)
