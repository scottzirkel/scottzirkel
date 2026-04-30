const SITE_URL = 'https://scottzirkel.com';
const CDN_BASE = 'https://cdn.scottzirkel.com/';
const PERSON_ID = SITE_URL;

export interface DrawingImage {
    src: string;
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
        name: input.name,
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
