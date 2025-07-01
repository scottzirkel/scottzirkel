<?php

namespace Scott\Book\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class WritingJsonController
{
    public function __invoke(Request $request): JsonResponse
    {
        $books = json_decode(file_get_contents(base_path('app-modules/book/resources/data/books.json')), true);
        $lastUpdated = '2025-06-23T17:02:00Z';

        return response()->json([
            'version' => '1.0',
            'lastUpdated' => $lastUpdated,
            'author' => 'Scott Zirkel',
            'works' => array_map(function ($book) use ($lastUpdated) {
                return [
                    'title' => $book['title'],
                    'type' => ucfirst($book['type']),
                    'datePublished' => $book['published_at'],
                    'url' => $book['url'],
                    'description' => $book['description'],
                    'publisher' => $book['publisher'],
                    'collaborators' => array_values(array_filter(array_map(function ($credit) {
                        // Only include non-author roles as collaborators
                        if (strtolower($credit['role']) !== 'author') {
                            return [
                                '@type' => 'Person',
                                'name' => $credit['name'],
                                'role' => ucfirst($credit['role']),
                            ];
                        }

                        return null;
                    }, $book['credits']))),
                    'lastModified' => $lastUpdated,
                ];
            }, $books),
        ]);
    }
}
