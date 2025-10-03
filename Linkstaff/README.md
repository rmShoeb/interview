<div id="top"></div>
<div align="center">
<h1 align="center">Emoji Calculator</h1>
</div>


### Built With

* [PHP 7.4.3](https://www.php.net)
* [Bootstrap 5](https://getbootstrap.com)



## Getting Started

To get a local copy up and running, follow these simple steps.

### Prerequisites

* php
  ```sh
  sudo apt install php
  ```

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/rmShoeb/linkstaff-recruitment.git
   ```



## Usage

### To run the app
1. 
    ```sh
    cd linkstaff-recruitment
    ```
2. Switch to ```development``` branch
    ```sh
    git checkout development
    ```
3. Run the server on a port (e.g. 8000)
    ```sh
    php -S localhost:8000
    ```
4. Enter ```http://localhost:8000``` in your browser url.
5. The front-end uses ```Bootstrap CDN```, so an active internet connection is required.




## Approach

The project is divided into 4 different files.
* ```boilerplate.php```: Contains the html. The form does a ```POST``` request to the currently running script (i.e. ```index.php```) when submitted.
* ```calculator.php```: Contains the ```Calculator``` class. The attributes are the operands, which are set via the constructor, and an associative array, which is used to save the result and errors (if any). The ```calculate``` function takes in a string that denotes the operator, and a ```switch``` statement determines which operator to use, based on the parameter.
* ```utilities.php```: Contains the utility functions. Currently, it contains the ```json_response``` function, which takes an associative array as input, and creates an HTTP response.
* ```index.php```: Script that combines it all. After the form is submitted, the operands are used to create a new ```Calculator``` object. Then the operator is used to calculate the value. The result is stored in a variable, that is passed to the ```json_response``` function.




<p align="right">(<a href="#top">back to top</a>)</p>
