# censor-order-details
Hide sensitive customer order details in WooCommerce Admin page.

__BEFORE__

![hide-billing-shipping-before](https://github.com/user-attachments/assets/8a835fc3-7e88-451e-b94b-15d63b290754)

__AFTER__

![hide-billing-shipping-after](https://github.com/user-attachments/assets/44471967-a632-4568-85a2-bec55c455cd7)

## Download

Download from [WordPress plugin repository](https://wordpress.org/plugins/censor-order-details/).

You can also get the latest version from any of our [release tags](https://github.com/badasswp/censor-order-details/releases).

## Why Censor Order Details?

This plugin helps you __hide sensitive customer data__ found in the WooCommerce Admin orders page from prying eyes.

Sometimes, customer data can contain sensitive information which you do not want every user to see. This is where __Censor Order Details__ plugin comes in. It simply __hides__ this customer data from prying eyes, so that they are not accessible to users with malicious intent.

__Please note__ that this plugin only visually hides the Order details information via custom CSS styling and does not tamper with the PHP code functionality of the page, the order details can still be accessed programatically via the page code.

## Contribute

Contributions are __welcome__ and will be fully __credited__. To contribute, please fork this repo and raise a PR (Pull Request) against the `master` branch.

### Pre-requisites

You should have the following tools before proceeding to the next steps:

- Composer
- Yarn
- Docker

To enable you start development, please run:

```bash
yarn start
```

This should spin up a local WP env instance for you to work with at:

```bash
http://censor-order-details.localhost:6200
```

You should now have a functioning local WP env to work with. To login to the `wp-admin` backend, please use `admin` for username & `password` for password.

__Awesome!__ - Thanks for being interested in contributing your time and code to this project!
