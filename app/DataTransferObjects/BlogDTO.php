<?php

namespace App\DataTransferObjects;

readonly class BlogDto
{
    public function __construct(
        public readonly string $title,
        public readonly ?string $subtitle,
        public readonly string $category,
        public readonly string $excerpt,
        public readonly string $blogHighlight,
        public readonly string $blogContent
    ) {}
    
    /**
     * Create DTO from validated request array.
     *
     * @param array $validatedData Keys: title, subtitle, category, excerpt, blog_highlight, blog_content
     */
    public static function fromRequest(array $payload): self
    {

        return new self(
            title:  $payload['title'],
            subtitle:  $payload['subtitle'] ?? null,
            category:  $payload['category'],
            excerpt:  $payload['excerpt'],
            blogHighlight:  $payload['blog_highlight'],
            blogContent:  $payload['blog_content'],
        );
    }   

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'category' => $this->category,
            'excerpt' => $this->excerpt,
            'blog_highlight' => $this->blogHighlight,
            'content' => $this->blogContent,

        ];
    }

    /**
     * Convert comma-separated highlight string to JSON in the provided array.
     *
     * Example input:
     *  ['blog_highlight' => 'one, two, three']
     *
     * Returns: ['blog_highlight' => '["one","two","three"]', ...]
     */
    public static function convertToJson(array $data): array
    {
        if (!empty($data['blog_highlight'])) {
            $step1 = explode(',', $data['blog_highlight']);

            $step2 = array_map('trim', $step1);

            $step3 = array_filter($step2, fn ($val) => $val !== '');

            $data['blog_highlight'] = json_encode(array_values($step3));

        }

        return $data;
    }
}
