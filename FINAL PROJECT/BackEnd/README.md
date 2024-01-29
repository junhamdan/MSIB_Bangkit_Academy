# How to run

1. Install dependencies
    ```
    pip install -r requirements.txt
    ```
    - if encounter error, run
        ```
        python -m pip install --upgrade pip
        ```
2. Run migration
    ```
    alembic upgrade head
    ```
3. Run the app
    ```
    uvicorn src.main:app --reload
    // or
    uvicorn src.main:app
    ```