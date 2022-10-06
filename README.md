# Assessment

One of my favorite hobbies is kite surfing. From the place where I live to almost all kitesurfing spots, it’s at least a one-hour drive. I often took the car to one of my spots but had to come back disappointed, because there was not enough wind.

I decided to put wind meters on all my favorite spots. I started with one and at the moment I’ve got 30 meters on different spots. Because I bought them over the years, the brands are different from each other. So at the moment, I’ve got 3 brands but I already know that the next meter I buy is different.  Also, the measurement units can be different, for example, m/s and knots. All meters share the ability to get the data through an API.

- The code doesn't have to work 100% 
- It should take you ~2hours
- Assume that everytime time you call the meters API, you will retrieve an array of 4 objects for past one hour (15 min per object). 
- We will call the endpoint every, 15 min, so I am as up to date as possible 


### Task 1
I want you to make a Laravel application where you get all this data from the windmeters API quater and store it in a MySQL DB. We need to store the wind in knots in DB. Notice that I created a spots table where you find the meters by brand and their needed login credentials. Below you find the different JSON structures according to the brand.

### Task 2
I also want to retrieve the stored data through an API on your application for different users in our DB. So they can do something like kitesurfspot.nl/api/spot/lauwersoog, and then retrieve the stored data for the last 24 hours. Each user in the DB is paying to access one or multiple spots. So a user can only view spot location where he/she is paying for. You don't have to create a login, put assume that you have an auth user that will access the endpoint, so we should protect unwanted access.


```json
// format brand1
// API access by unique token, will not changes, for the access it does not matter what the token is
[
    {
        "date_time": "2022-10-06 12:00:00.000000 UTC (+00:00)",
        "direction": "NNW",
        "meter_per_second": 11
    },
    {
        "date_time": "2022-10-06 12:15:00.000000 UTC (+00:00)",
        "direction": "NW",
        "meter_per_second": 10
    },
    {
        "date_time": "2022-10-06 12:30:00.000000 UTC (+00:00)",
        "direction": "NNW",
        "meter_per_second": 12
    },
    {
        "date_time": "2022-10-06 12:45:00.000000 UTC (+00:00)",
        "direction": "N",
        "meter_per_second": 13
    }
]
// format brand2
// API by basic username and password
[
    {
        "datetime": 1665064800,
        "dir": "NNW",
        "ms": "11"
    },
    {
        "datetime": 1665065700,
        "dir": "NW",
        "ms": "10"
    },
    {
        "datetime": 1665066600,
        "dir": "NNW",
        "ms": "12"
    },
    {
        "datetime": 1665067500,
        "dir": "N",
        "ms": "13"
    }
]

// format brand3
// API by basic username and password
[
    {
        "time": "2022-10-06T14:00:00+00:00",
        "wind_dir": "NNW",
        "knots": 22
    },
    {
        "time": "2022-10-06T14:15:00+00:00",
        "wind_dir": "NW",
        "knots": 24
    },
    {
        "time": "2022-10-06T14:30:00+00:00",
        "wind_dir": "NNW",
        "knots": 24
    },
    {
        "time": "2022-10-06T14:45:00+00:00",
        "wind_dir": "N",
        "knots": 22
    }
]
```
