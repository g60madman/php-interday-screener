# PHP Interday Screener v0.1
This is a PHP web script which will pull data from the Marketwatch Screen application and spit out a list of symbols. This is
very basic feature at this time and will improve in future releases.

# Currently working
1. Create your own screen information form the following [link](http://www.marketwatch.com/tools/stockresearch/screener) and save url in the `""` on the following [line](https://github.com/g60madman/php-interday-screener/blob/master/index.php#L3) of code.
2. Uploade index.php and load page, it will spit out of a list of symbols based on your search

# Goals
1. Add ability to import data into SQL
2. Query data in SQL for 2+ days to see which stocks are showing up multiple times
