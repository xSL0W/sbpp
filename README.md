# sbpp-1.6.4 fork 
# Multiple roles on different servers

This is a fork of https://github.com/sbpp/sourcebans-pp/releases/tag/1.6.4

# How to setup

1. Upload sbans.sql to your database
2. Add all web files into your webserver and go to config.inc.php and add your database credentials
3. Login with default username 'admin' and password 'changeME123123'
4. Change your password to a password you'd like
5. Create admin groups, add your server(s), configure your page, etc
6. Copy-paste from folder 'game' to your gameserver and configure sourcebans.cfg and the other files
7. Add "sourcebans" to databases.cfg 


# How to add multiple admins with different role?

- Lets say you want Mario to have admin on your 2 servers. Moderator on serverA and Administrator on serverB
- Create 2 accounts with different names, lets say 'serverA_Mario' and 'serverB_Mario'
- Make sure you check only 1 server access for each account and that's it
