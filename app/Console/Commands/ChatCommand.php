<?php

namespace App\Console\Commands;

use App\AI\Chat;
use Illuminate\Console\Command;
use function Laravel\Prompts\{outro, text, info, spin};

class ChatCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chat {--system=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ready to start a chat with OpenAI GPT-3.5 Turbo?';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $chat = new Chat();

        if ($this->option('system')) {
            $chat->systemMessage($this->option('system'));
        }

        $question = text(
            label: 'What is your question for API?',
            required: true
        );

        info(
            spin(fn() => $chat->send($question), 'Sending your question to OpenAI...')
        );

        while ($question = text("Do you want to respond?")) {
            info (
                spin(fn() => $chat->send($question), 'Sending your response to OpenAI...')
            );
        }
        
        outro('Conversation over.');
    }
}
