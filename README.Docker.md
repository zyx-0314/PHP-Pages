### Building and running your application

When you're ready, start your application by running:
`docker compose up --build`.
Watch your Code Changes from host and sync to the container
`docker compose watch`.

Your application will be available at http://localhost:8000.

### PHP extensions
If your application requires specific PHP extensions to run, they will need to be added to the Dockerfile. Follow the instructions and example in the Dockerfile to add them.