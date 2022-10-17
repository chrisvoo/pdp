<?php
namespace Pdp\Structural\Composite;

require __DIR__ . '/../../../vendor/autoload.php';

$songOne = new Song('Lost In Stereo');
$songTwo = new Song('Running From Lions');
$songThree = new Song('Guts');
$playlistOne = new Playlist();
$playlistTwo = new Playlist();
$playlistThree = new Playlist();
$playlistTwo->addSong($songOne);
$playlistTwo->addSong($songTwo);
$playlistThree->addSong($songThree);
$playlistOne->addSong($playlistTwo);
$playlistOne->addSong($playlistThree);
$playlistOne->play();

/*
    __construct -> Lost In Stereo 634d2f9f6b677
    __construct -> Running From Lions 634d2f9f6b67d
    __construct -> Guts 634d2f9f6b67e
    Playing song #634d2f9f6b677, Lost In Stereo.
    Playing song #634d2f9f6b67d, Running From Lions.
    Playing song #634d2f9f6b67e, Guts.
 */