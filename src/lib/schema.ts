const SITE_URL = 'https://scottzirkel.com';
const CDN_BASE = 'https://cdn.scottzirkel.com/';
const PERSON_ID = SITE_URL;

export interface DrawingImage {
    src: string;
    alt?: string;
    w?: number;
    h?: number;
}

export interface DrawingSchemaInput {
    slug: string;
    name: string;
    description?: string;
    publisher?: string;
    dateCreated?: string;
    images?: DrawingImage[];
    creditText?: string;
    license?: string;
}

export interface BreadcrumbCrumb {
    name: string;
    url: string;
}

export function getBreadcrumbSchema(crumbs: BreadcrumbCrumb[]) {
    return {
        '@context': 'https://schema.org',
        '@type': 'BreadcrumbList',
        itemListElement: crumbs.map((c, i) => ({
            '@type': 'ListItem',
            position: i + 1,
            name: c.name,
            item: c.url,
        })),
    };
}

export interface ArticleSchemaInput {
    slug: string;
    headline: string;
    description?: string;
    image?: string;
    datePublished: string;
    dateModified?: string;
    wordCount?: number;
    keywords?: string[];
    articleSection?: string;
}

export function getArticleSchema(input: ArticleSchemaInput) {
    const url = `${SITE_URL}/articles/${input.slug}`;
    const schema: Record<string, unknown> = {
        '@context': 'https://schema.org',
        '@type': 'BlogPosting',
        '@id': url,
        mainEntityOfPage: { '@type': 'WebPage', '@id': url },
        headline: input.headline,
        url,
        inLanguage: 'en-US',
        author: {
            '@type': 'Person',
            '@id': PERSON_ID,
            name: 'Scott Zirkel',
            url: `${SITE_URL}/`,
        },
        publisher: {
            '@type': 'Person',
            '@id': PERSON_ID,
            name: 'Scott Zirkel',
            url: `${SITE_URL}/`,
            logo: {
                '@type': 'ImageObject',
                url: `${CDN_BASE}misc/avatar-logo.png`,
            },
        },
        datePublished: input.datePublished,
        dateModified: input.dateModified ?? input.datePublished,
    };
    if (input.description) schema.description = input.description;
    if (input.image) schema.image = input.image;
    if (input.wordCount) schema.wordCount = input.wordCount;
    if (input.keywords && input.keywords.length > 0) schema.keywords = input.keywords.join(', ');
    if (input.articleSection) schema.articleSection = input.articleSection;
    return schema;
}

export function getDrawingSchema(input: DrawingSchemaInput) {
    const url = `${SITE_URL}/drawings/${input.slug}`;
    const credit =
        input.creditText ??
        `Art by Scott Zirkel${input.publisher ? `. Published by ${input.publisher}.` : '.'}`;

    const schema: Record<string, unknown> = {
        '@context': 'https://schema.org',
        '@type': 'VisualArtwork',
        '@id': url,
        url,
        mainEntityOfPage: { '@type': 'WebPage', '@id': url },
        inLanguage: 'en-US',
        name: input.name,
        artform: 'Illustration',
        artMedium: 'Mixed media on sketchcard',
        creator: {
            '@type': 'Person',
            '@id': PERSON_ID,
            name: 'Scott Zirkel',
            url: `${SITE_URL}/`,
        },
        isPartOf: {
            '@type': 'CollectionPage',
            '@id': `${SITE_URL}/drawings`,
            url: `${SITE_URL}/drawings`,
            name: 'Drawings by Scott Zirkel',
        },
    };

    if (input.description) schema.description = input.description;
    if (input.publisher) schema.publisher = { '@type': 'Organization', name: input.publisher };
    if (input.dateCreated) schema.dateCreated = input.dateCreated;

    if (input.images && input.images.length > 0) {
        schema.image = input.images.map((img) => {
            const obj: Record<string, unknown> = {
                '@type': 'ImageObject',
                contentUrl: `${CDN_BASE}${img.src}`,
                creator: {
                    '@type': 'Person',
                    '@id': PERSON_ID,
                    name: 'Scott Zirkel',
                },
                creditText: credit,
                copyrightNotice: 'Scott Zirkel',
            };
            if (img.w !== undefined) obj.width = img.w;
            if (img.h !== undefined) obj.height = img.h;
            if (input.license) obj.license = input.license;
            return obj;
        });
    }

    return schema;
}
