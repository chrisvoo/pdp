<?php

namespace Pdp\Structural\Composite;

/**
 * About spl_object_hash: note that the contents (properties) of the object are NOT hashed by the function, merely its
 * internal handle and handler table pointer. This is sufficient to guarantee that any two objects simultaneously
 * co-residing in memory will have different hashes. Uniqueness is not guaranteed between objects that did not reside
 * in memory simultaneously, for example:
 * var_dump(spl_object_hash(new stdClass()), spl_object_hash(new stdClass()));
 * Running this alone will usually generate the same hashes, since PHP reuses the internal handle for the first
 * stdClass after it has been dereferenced and destroyed when it creates the second stdClass.
 */
class Playlist implements Music
{
    private $songs = [];

    public function addSong(Music $content): bool
    {
        $this->songs[spl_object_hash($content)] = $content;
        return true;
    }

    public function removeItem(Music $content): bool
    {
        unset($this->songs[spl_object_hash($content)]);
        return true;
    }

    public function play()
    {
        foreach ($this->songs as $content) {
            $content->play();
        }
    }
}