export type Country = {
  name: string
  flag: string
}

export type Countries = Array<Country>

export const visited: Countries = [
  {
    name: 'USA',
    flag: '🇺🇸',
  },
  {
    name: 'Mexico',
    flag: '🇲🇽',
  },
  {
    name: 'Rwanda',
    flag: '🇷🇼',
  },
  {
    name: 'Tanzania',
    flag: '🇹🇿',
  },
]

export const layovers: Countries = [
  {
    name: 'Canada',
    flag: '🇨🇦',
  },
  {
    name: 'Belgium',
    flag: '🇧🇪',
  },
  {
    name: 'Germany',
    flag: '🇩🇪',
  },
  {
    name: 'Ethiopia',
    flag: '🇪🇹',
  },
]
