<?php
namespace Application\Entity;

/**
 * @Entity @Table(name="posts")
 */
class Post
{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;
    /** @Column(type="string", length=255) */
    protected $name;
    /** @Column(type="text", nullable=true) */
    protected $text;
    /** @Column(type="datetime", nullable=true) */
    protected $created;
    /** @Column(type="datetime", nullable=true) */
    protected $modified;
}
