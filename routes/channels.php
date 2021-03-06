<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('larachatter.{slug}', function ($user, $slug) {
    return (string) $user->{config('larachatter.fields.slug')} === (string) $slug;
});

Broadcast::channel('larachatter.conversation.{slug}', function ($user, $slug) {
    return true;
});
