# Digital Roots Backend Challenge

## Instructions after clonning the project
1. Set the .env file

```bash
cp .env.example .env
```

2. Generate Laravel APP Key

```bash
./vendor/bin/sail artisan key:generate
```

3. Run the migrations

```bash
./vendor/bin/sail artisan migrate
```

4. Run the seeders

```bash
./vendor/bin/sail artisan db:seed
```

5. Run the container

```bash
./vendor/bin/sail up
```

## Docker Usage

Setting up the containers as a background task

```bash
./vendor/bin/sail up -d
```

Shutting down the containers

```bash
./vendor/bin/sail down
```

## API Routes

- Flights:
    - /api/flights/?page=1&per_page=15
    - /api/flights/:id

- Tickets:
    - /api/tickets/?page=1&per_page=15
    - /api/tickets/:id
 
## Screenshot of Welcome Page

Changed welcome page to make API testing easier

![2023-07-26_00-29](https://github.com/Darkmyes/digital_root_backend_challenge/assets/30057827/f18475e3-127a-4d81-9da6-e2e92c1a2835)

