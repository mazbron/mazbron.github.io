sudo apt purge google-chrome-stable -y

sudo dpkg -i chrome60.deb -y
sudo apt-get -f install -y

cd /home
cd chrome60
wget https://github.com/mazbron/x/raw/master/fmb/game%2Balexa.tar.gz
sleep 3
rm -rf Default
sleep 3
tar -xvf game+alexa.tar.gz
