# Laravel GPT-3.5 Turbo Chat Application

## Introduction

This Laravel application integrates OpenAI's GPT-3.5 Turbo, providing a unique command-line chat experience. By leveraging the power of GPT-3.5 Turbo, the application offers users the ability to interact with an AI directly from the Laravel command line using the `php artisan chat` command.

## Getting Started

### Prerequisites

- PHP >= 7.3
- Composer
- Laravel >= 8.0
- A valid OpenAI API key

### Installation

1. **Clone the Repository**
    ```bash
    git clone https://github.com/AmilM7/ChatWithOpenAI.git
    cd ChatWithOpenAI
    ```

2. **Install Dependencies**
    ```bash
    composer install
    ```

3. **Environment Setup**

    - Edit `.env` to include your OpenAI API key:
        ```plaintext
        OPENAI_API_KEY=your_openai_api_key_here
        ```

4. **Generate Application Key**
    ```bash
    php artisan key:generate
    ```

5. **Run the Application**
        ```bash
        php artisan chat
        ```

