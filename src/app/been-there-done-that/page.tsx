import PageSubtitle from '../components/PageSubtitle'
import PageTitle from '../components/PageTitle'
import states from '../../../lib/states'
import parks from '../../../lib/parks'
import { visited, layovers } from '../../../lib/countries'

export default function Page() {
  return (
    <>
      <PageTitle>Been There Done That</PageTitle>
      <p>
        Many people have bucket lists. Things they want to do before they die.
        Most die before doing any of them. Instead, I take every opportunity to
        explore I can. Here's a list of places I've been and things I've done.
      </p>
      <div className="grid grid-cols-3 gap-8">
        <div className="col-span-1">
          <PageSubtitle>States</PageSubtitle>
          <ol className="list-decimal list-inside">
            {states.map((state) => (
              <li key={state.name} className="space-x-1">
                <span>{state.name}</span>
                {state.camped && (
                  <span className="cursor-help" title="Camped">
                    ⛺️
                  </span>
                )}
                {state.peaked && (
                  <span
                    className="cursor-help"
                    title="Summited the state highpoint"
                  >
                    🏔
                  </span>
                )}
              </li>
            ))}
          </ol>
        </div>
        <div className="col-span-1 space-y-4">
          <PageSubtitle>National Parks</PageSubtitle>
          <ol className="list-decimal list-inside">
            {parks.map((park) => (
              <li>{park}</li>
            ))}
          </ol>
          <PageSubtitle>Countries</PageSubtitle>
          <ol className="list-decimal list-inside">
            {visited.map((country: { name: string; flag: string }) => (
              <li key={country.name}>
                {country.name} {country.flag}
              </li>
            ))}
          </ol>
          <PageSubtitle>Layover Countries</PageSubtitle>
          <ol className="list-decimal list-inside">
            {layovers.map((country: { name: string; flag: string }) => (
              <li key={country.name}>
                {country.name} {country.flag}
              </li>
            ))}
          </ol>
        </div>
        <div className="col-span-1 space-y-4">
          <PageSubtitle>Other Cool Things</PageSubtitle>
          <PageSubtitle>Worlds Largest Lakes I've Been In</PageSubtitle>
          <ol className="list-decimal list-inside">
            <li>Lake Superior</li>
            <li>Lake Victoria</li>
            <li>Lake Michigan</li>
          </ol>
          <PageSubtitle>Comic Cons</PageSubtitle>
          <ol className="list-decimal list-inside">
            <li></li>
          </ol>
        </div>
      </div>
    </>
  )
}
