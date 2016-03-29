### Installation

Required [Virtual Box][1] (5 or higher) and [Vagrant][2] (1.8.x)

Add this line to your hosts file:
```
192.168.56.101 local.laravel.portfolio.ru
```
If this ip already busy, you may change it in [config][4]
```sh
$ git clone https://github.com/killbond/laravel-portfolio
$ cd laravel-portfolio
$ vagrant up
```
For access to admin features, change ip, if it needed in [request facade][3]

  [1]: https://www.virtualbox.org/
  [2]: https://www.vagrantup.com/
  [3]: https://github.com/killbond/laravel-portfolio/blob/master/project/app/Models/Request.php#L10
  [4]: https://github.com/killbond/laravel-portfolio/blob/master/puphpet/config.yaml#L25