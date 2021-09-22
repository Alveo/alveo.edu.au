# Alveo website

This repo is for the [public Alveo website](http://alveo.edu.au), powered by [WordPress](https://wordpress.org) and [deployed](https://github.com/dokku-community/dokku-wordpress) using [Dokku](https://github.com/dokku).

## Upgrading WordPress

* Merge WordPress upstream tag into master (resolving conflicts as required)
* git push dokku master

In the event of deployment problems, ensure Dokku & Herokuish are up-to-date on the server and
also check whether the version of heroku-buildpack-php specified in `.buildpacks` needs to be
bumped.

## Persistent Storage

Wordpress stores uploaded content in wp-content/uploads, we use persistent storage to keep this outside of the container.

```sh
dokku storage:mount alveowordpress /var/lib/dokku/data/storage/alveowp-uploads:/app/wp-content/uploads
```
