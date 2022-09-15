#!/bin/bash

export RAILS_ENV=production;
source /usr/local/rvm/scripts/rvm;

user=vps;
path="/home/$user/data/skm";

echo -e "";
chown -R $user:$user "$path";

cd "$path";
source .env;
echo -e "> go home";

ac="yes";
until [ $ac = "-" ]; do
    echo -e "";
    echo -e "+ : ▼ server";
    echo -e "";
    echo -e "0 : console";
    echo -e "";
    echo -e "1 : ▼ bundle";
    echo -e "2 : ▼ prepare";
    echo -e "3 : ▼ cache";
    echo -e "4 : ▼ cron";
    echo -e "";
    echo -e "5 : restart";
    echo -e "";
    echo -e "6 : dumps";
    echo -e "";
    echo -e "7 : ▼ supervisor restart";
    echo -e "8 : memcached restart";
    echo -e "9 : ▼ nginx";
    echo -e "";
    echo -e "Type \c ";
    read  ac;
    case $ac in
        "+")
            echo -e "> server";
            acc="yes";
            until [ $acc = "-" ]; do
                echo -e "";
                echo -e "    1 : development";
                echo -e "    2 : production";
                echo -e "";
                echo -e "    - : exit";
                echo -e "";
                echo -e "    Type \c ";
                read  acc;
                case $acc in
                    "1")
                        echo -e "> server development";
                        ruby bin/rails server -e development;;
                    "2")
                        echo -e "> server production";
                        ruby bin/rails server -e production;;
                esac
            done;;

        "0")
            echo -e "> rails console";
            ruby bin/rails console;;

        "1")
            echo -e "> bundle";
            acc="yes";
            until [ $acc = "-" ]; do
                echo -e "";
                echo -e "    1 : install";
                echo -e "    2 : upgrade";
                echo -e "    3 : clean";
                echo -e "    4 : show";
                echo -e "";
                echo -e "    - : exit";
                echo -e "";
                echo -e "    Type \c ";
                read  acc;
                case $acc in
                    "1")
                        echo -e "> bundle install";
                        ruby bin/bundle install;;
                    "2")
                        echo -e "> bundle upgrade";
                        ruby bin/bundle install;;
                    "3")
                        echo -e "> bundle clean";
                        ruby bin/bundle clean --force;;
                    "4")
                        echo -e "> bundle show";
                        ruby bin/bundle show;;
                esac
            done;;

        "2")
            echo -e "> prepare";
            acc="yes";
            until [ $acc = "-" ]; do
                echo -e "";
                echo -e "    1 : db:create";
                echo -e "    2 : db:migrate";
                echo -e "    3 : db:seed";
                echo -e "    4 : assets:precompile";
                echo -e "";
                echo -e "    - : exit";
                echo -e "";
                echo -e "    Type \c ";
                read  acc;
                case $acc in
                    "1")
                        # echo -e "> rails db:create development";
                        # ruby bin/rails db:create  RAILS_ENV=development;
                        # echo -e "> rails db:create test";
                        # ruby bin/rails db:create  RAILS_ENV=test;
                        echo -e "> rails db:create production";
                        ruby bin/rails db:create;;
                    "2")
                        # echo -e "> rails db:migrate development";
                        # ruby bin/rails db:migrate RAILS_ENV=development;
                        # echo -e "> rails db:migrate test";
                        # ruby bin/rails db:migrate RAILS_ENV=test;
                        echo -e "> rails db:migrate production";
                        ruby bin/rails db:migrate;;
                    "3")
                        # echo -e "> rails db:seed development";
                        # ruby bin/rails db:seed RAILS_ENV=development;
                        echo -e "> rails db:seed production";
                        ruby bin/rails db:seed;;
                    "4")
                        # echo -e "> rails assets:precompile RAILS_ENV=development";
                        # ruby bin/rails assets:precompile;
                        echo -e "> rails assets:precompile RAILS_ENV=production";
                        ruby bin/rails assets:precompile;;
                esac
            done;;

        "3")
            echo -e "> cache";
            acc="yes";
            until [ $acc = "-" ]; do
                echo -e "";
                echo -e "    1 : tmp cache clear";
                echo -e "    2 : cache_digests dependencies";
                echo -e "    3 : cache_digests nested_dependencies";
                echo -e "";
                echo -e "    - : exit";
                echo -e "";
                echo -e "    Type \c ";
                read  acc;
                case $acc in
                    "1")
                        echo -e "> cache_digests:dependencies";
                        ruby bin/rails tmp:cache:clear;;
                    "2")
                        echo -e "> cache_digests:dependencies";
                        ruby bin/rails cache_digests:dependencies TEMPLATE=;;
                    "3")
                        echo -e "> cache_digests:nested_dependencies";
                        ruby bin/rails cache_digests:nested_dependencies TEMPLATE=;;
                esac
            done;;

        "4")
            echo -e "> cron";
            acc="yes";
            until [ $acc = "-" ]; do
                echo -e "";
                echo -e "    * : crontab edit";
                echo -e "    0 : crontab list";
                echo -e "";
                echo -e "    1 : whenever list";
                echo -e "    2 : whenever write";
                echo -e "    3 : whenever update";
                echo -e "    4 : whenever clear";
                echo -e "";
                echo -e "    5 : sitemap:create";
                echo -e "    6 : sitemap:refresh";
                echo -e "    7 : sitemap:clean";
                echo -e "";
                echo -e "    - : exit";
                echo -e "";
                echo -e "    Type \c ";
                read  acc;
                case $acc in
                    "*")
                        echo -e "> crontab edit";
                        crontab -e -u $user;;
                    "0")
                        echo -e "> crontab list";
                        crontab -l -u $user;;
                    "1")
                        echo -e "> whenever list";
                        whenever -l -u $user;;
                    "2")
                        echo -e "> whenever write";
                        whenever -w -u $user;;
                    "3")
                        echo -e "> whenever update";
                        whenever -i -u $user;;
                    "4")
                        echo -e "> whenever clear";
                        whenever -c -u $user;;
                    "5")
                        echo -e "> rails sitemap:create";
                        ruby bin/rails sitemap:create;;
                    "6")
                        echo -e "> rails sitemap:refresh";
                        ruby bin/rails sitemap:refresh;;
                    "7")
                        echo -e "> rails sitemap:clean";
                        ruby bin/rails sitemap:clean;;
                esac
            done;;

        "5")
            echo -e "> rails restart";
            ruby bin/rails restart;;

        "6")
            echo -e "> dumps create";
            export PGUSER=vps;
            export PGPASSWORD=Vps1234567;
            pg_dump --column-inserts skm > `date +.dumps/%Y%m%d.pg_dump.sql` &&
            pg_dump --column-inserts skm | gzip -c > `date +.dumps/%Y%m%d.pg_dump.sql.gz` &&
            zip -r `date +.dumps/%Y%m%d.storage.zip` storage/;;

        "7")
            acc="yes";
            until [[ $acc == "-" ]]; do
                echo -e "";
                echo -e "    1 : stop";
                echo -e "    2 : start";
                echo -e "    3 : restart";
                echo -e "    4 : restart all";
                echo -e "    - : exit";
                echo -e "";
                echo -e "    Type \c ";
                read  acc;
                case $acc in
                    "1")
                        echo -e "> supervisor stop";
                        supervisorctl stop vps.skm;;
                    "2")
                        echo -e "> supervisor start";
                        supervisorctl start vps.skm;;
                    "3")
                        echo -e "> supervisor restart";
                        supervisorctl reread;
                        supervisorctl restart vps.skm;;
                    "4")
                        echo -e "> supervisor restart all";
                        systemctl restart supervisor;;
                esac
            done;;

        "8")
            echo -e "> memcached restart";
            service memcached restart;;

        "9")
            acc="yes";
            until [[ $acc == "-" ]]; do
                echo -e "";
                echo -e "    1 : restart";
                echo -e "    2 : status";
                echo -e "";
                echo -e "    - : exit";
                echo -e "";
                echo -e "    Type \c ";
                read  acc;
                case $acc in
                    "1")
                        echo -e "> nginx restart";
                        systemctl restart nginx.service;;
                    "2")
                        echo -e "> nginx status";
                        systemctl status nginx.service;;
                esac
            done;;
    esac
done

chown -R $user:$user "$path";
echo -e "";
