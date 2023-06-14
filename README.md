# weather-info [^1]

### Installation Steps:

1. Open your **project root** folder in a terminal and run the below command to install the package;
> `composer require prasun-packages/weather-info --with-all-dependencies`
2. Open the _config/app.php_ file within the **project root** folder and scroll down to the **providers** array. In that array, there should be a section for the **package service providers**. Add the following line of code in that section;
> `PrasunPackages\WeatherInfo\Providers\WeatherInfoProvider::class,`
3. To publish the configuration file into Laravel’s _config_ folder within the **project root**, run the below command;
> `php artisan vendor:publish`
4. When you hit the above command in a terminal, you will be provided a list of all **service providers** registered in your application. Choose the  _PrasunPackages\WeatherInfo\Providers\WeatherInfoProvider_ and hit **enter**.
5. We are using API Ninjas [^2] in our package. So to run the application you need an **API Key** which you will get by Sign up below link;
> [https://api-ninjas.com](https://api-ninjas.com/)
6. Login and copy the **API Key** from the **My Account** section, add one environment variable within the _.env_ file in your **project root** folder and paste the same as value;
> `API_NINJAS_API_KEY=[replace_with_your_api_key]`

### Run the application:
You are now able to access the **weather-info** via the below route within your application;
> `/weather-info`

#### That's all! :smile: :partying_face:

###### Developed and maintained by [Prasun Das](https://github.com/prasun-lm). :copyright: All rights reserved. 

[^1]: This is a **Laravel** custom package.
[^2]: This is a third-party **API provider**.