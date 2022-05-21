# Manage Countries

APIs related to managing country information.

**List Countries**
----
  List registered countries.

* **API Endpoint**

  <a href="">/api/v1/countries</a>

* **Method:**

  `GET`

* **Success Response:**

  * ***Code:*** 200 <br />
    ***Content:*** 
    ```json 
    {
        "Status": true,
        "Countries": [
            {
                "id": 2,
                "country_name": "Djibouti",
                "capital_city": "Djibouti",
                "telephone_code": "252",
                "country_code": "DJ",
                "created_at": "2022-05-21T04:04:42.000000Z",
                "updated_at": "2022-05-21T04:06:09.000000Z"
            }
        ]
    }
    ```

**Register Country**
----
  Register a country using country_name, capital_city, telephone_code and country code as required parameters.

* **API Endpoint**

  <a href="">/api/v1/countries</a>

* **Method:**

  `POST`
  
*  **Form Params**

   ***Required:***
    - `country_name=[string]`
    - `capital_city=[string]`
    - `telephone_code=[string]`
    - `country_code=[string]`

* **Success Response:**

  * ***Code:*** 200 <br />
    ***Content:*** 
    ```json 
    {
        "Status": true,
        "Message": "Country successfully registered." 
    }
    ```
 
* **Error Response:**

  * ***Code:*** 422 Validation Failed <br />
    **Content:** 
    ```json 
    {
        "Status": false,
        "Error": "The country_name field is required."
    }
    ```

  or

   * ***Code:*** 422 Validation Failed <br />
    **Content:** 
    ```json 
    {
        "Status": false,
        "Error": "The country_name has already been taken."
    }
    ```

**Update Country**
----
  Register a country using country_name, capital_city, telephone_code and country code as required parameters.

* **API Endpoint**

  <a href="">/api/v1/countries</a>

* **Method:**

  `POST`
  
*  **Form Params**

   ***Required:***
    - `country_name=[string]`
    - `capital_city=[string]`
    - `telephone_code=[string]`
    - `country_code=[string]`

* **Success Response:**

  * ***Code:*** 200 <br />
    ***Content:*** 
    ```json 
    {
        "Status": true,
        "Message": "Country successfully registered." 
    }
    ```
 
* **Error Response:**

  * ***Code:*** 422 Validation Failed <br />
    **Content:** 
    ```json 
    {
        "Status": false,
        "Error": "The country_name field is required."
    }
    ```

  or

   * ***Code:*** 422 Validation Failed <br />
    **Content:** 
    ```json 
    {
        "Status": false,
        "Error": "The country_name has already been taken."
    }
    ```