# waitfor.php

I've created this little script because I needed something like wait-for-it.sh but had no `nc` available in my php docker image.

usage:

`php waitfor.php host port`

Currently it does not have configuration options and/or error checking.