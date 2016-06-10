# Clear VK scripts

## Token

* create desktop app
* auth, using this link(replace app id with your app id, e.g. 123):
`https://oauth.vk.com/authorize?client_id=APPID&scope=friends,offline&redirect_uri=https://oauth.vk.com/blank.html& display=page&v=API_5.52&response_type=token`
* copy token from it to script `api.php` to var `$token`
* use it from console: `php scriptname.php`

## Scripts

* Friends(`friends` folder)
    * I follow(from you to others)
        * get all YOUR friend requests(from you to others): `get_ifollow.php`
            * this list will be saved to `ifollow.txt` with 1k records
            * **for best performing(without Captcha) run this script and then `delete.php`
            and then again this script...**
        * delete all YOUR friend requests(from you to others): `delete.php`
    * Followers(from others to you)
        * add all of them:
            * `get_followers.php` && run `add_followers.php` and so on again...
        * delete all followers(convert them to subscribers)
            * get followers, rename `followers.txt` to `ifollow.txt` and run `delete.php`


## Performance

* scripts run 1 action per second(to avoid Captcha)
* for one getting method you can get max 1000 of ids
* so count by yourself... ;)

### Non-confirmed accounts

On accounts without associated phone number for some magic reason,
with using 1 sec delay, there is no much Captcha alerts

### Limits

There are hidden limits of using VK api methods in 1 day, so just try again tomorrow ;)

## Tips

### Feed

* to remove every showing user/group in your feed
    * open `edit feed` in you `vk.com/feed` and run in browser console(usually `F12`)
    * `var i = 0; while(i < 893){ $(".olist_item_wrap_on").click(); i++;}`
    * where 893 is number of pages you want to hide
    * than click save

## ToDo

* add get_dogs(deleted or bans users)
* add instruction for deleting "dogs" users

## License

**MIT**

## Contributing/help

Any pull requests/suggestions/help requests/questions are welcome, just open issue/PR

